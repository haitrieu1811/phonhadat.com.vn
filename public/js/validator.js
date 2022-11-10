function Validator(formSelector) {
    const _this = this;
    const formRules = {};
    const formElement = document.querySelector(formSelector);

    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    /**
     * Quy ước tạo rule:
     * - Nếu có lỗi thì return `error message`
     * - Nếu không có lỗi thì return `undefine`
     */
    const validatorRules = {
        required: function (value) {
            return value ? undefined : 'Vui lòng nhập trường này !';
        },
        email: function (value) {
            const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : 'Vui lòng nhập trường email !';
        },
        min: function (min) {
            return function (value) {
                return value.length >= min ? undefined : `Nhập tối thiếu ${min} kí tự !`;
            }
        },
        phoneNumber: function (value) {
            const regex = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
            return regex.test(value) ? undefined : 'Số điện thoại không hợp lệ';
        },
        isNumber: function (value) {
            const regex = /^[0-9]+$/;
            return regex.test(value) ? undefined : 'Vui lòng nhập số';
        },
        isImage: function (value) {
            const regex = /\.(gif|jpe?g|tiff?|png|webp|bmp)$/i;
            return regex.test(value) ? undefined : 'Vui lòng chọn file ảnh';
        },
        isUrl: function (value) {
            const regex = /^(ftp|http|https):\/\/[^ "]+$/;
            return regex.test(value) ? undefined : 'Url không hợp lệ';
        },
    }

    if (formElement) {
        const inputs = formElement.querySelectorAll('[name][rules]');
        for (var input of inputs) {
            const rules = input.getAttribute('rules').split('|');
            for (var rule of rules) {
                var ruleFunc = validatorRules[rule];
                if (rule.includes(':')) {
                    const ruleInfo = rule.split(':');
                    rule = ruleInfo[0];
                    ruleFunc = Function(ruleFunc)(ruleInfo[1]);
                }
                if (Array.isArray(formRules[input.name])) {
                    formRules[input.name].push(ruleFunc);
                } else {
                    formRules[input.name] = [ruleFunc];
                }
            }

            // Lắng nghe sự kiện để validate (blur, change, ...)
            input.onblur = handleValidate;
            input.oninput = handleClearError;
        }

        function handleValidate(e) {
            var rules = formRules[e.target.name];
            var errorMessage;

            for (var rule of rules) {
                errorMessage = rule(e.target.value);
                if (errorMessage) break;
            }

            const formGroup = getParent(e.target, '.form-group');
            if (errorMessage) {
                if (formGroup) {
                    formGroup.classList.add('form-group--invalid');
                    const forMessage = formGroup.querySelector('.form-message');
                    if (forMessage) {
                        forMessage.innerText = errorMessage;
                    }
                }
            } else {
                formGroup.classList.remove('form-group--invalid');
                formGroup.querySelector('.form-message').innerText = '';
            }

            return !errorMessage;
        }

        function handleClearError(e) {
            const formGroup = getParent(e.target, '.form-group');
            if (formGroup.classList.contains('form-group--invalid')) {
                formGroup.classList.remove('form-group--invalid');
                formGroup.querySelector('.form-message').innerText = '';
            }
        }

        // Xử lí sự kiện form submit
        formElement.onsubmit = function (e) {
            e.preventDefault();

            var isValid = true;

            for (var input of inputs) {
                if (!handleValidate({ target: input })) {
                    isValid = false;
                };
            }

            if (isValid) {
                var enableInputs = formElement.querySelectorAll('[name]:not([disabled])');
                var formValues = Array.from(enableInputs).reduce(function (values, input) {
                    switch (input.type) {
                        case 'radio':
                            values[input.name] = formElement.querySelector('[name="' + input.name + '"]:checked').value;
                            break;
                        case 'checkbox':
                            if (!input.matches(':checked')) {
                                return values
                            };
                            if (!Array.isArray(values[input.name])) {
                                values[input.name] = []
                            }
                            values[input.name].push(input.value);
                            break;
                        case 'file':
                            values[input.name] = input.files;
                            break;
                        default:
                            values[input.name] = input.value;
                    }
                    return values;
                }, {});
                if (typeof _this.onSubmit === 'function') {
                    _this.onSubmit(formValues);
                } else {
                    this.submit();
                }
            }
        }
    }
}