$(document).ready(function () {
    const fieldList = $('.repeater-list');
    const fieldWrapper = $('.repeater-wrapper');
    const btnAddField = $('.btn-repeater-create');

    btnAddField.on('click', function () {
        const clonedFieldWrapper = fieldWrapper.first().clone(true);
        const inputs = clonedFieldWrapper.find('input');
        inputs.each(function (index, input) {
            $(input).val('');
        });
        fieldList.append(clonedFieldWrapper);
    });

    fieldList.on('click', '.btn-repeater-delete', function (event) {
        const btn = event.target;
        btn.closest('.repeater-wrapper').remove();
    });
});