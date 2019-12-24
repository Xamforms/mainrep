$(function () {
    $(".cd-new-answer-icon").click(function (e) {
        $('.cd-answers-add').append('\n' +
            '                    <div class="cd-answer-container  block-have-border block-have-shadow">\n' +
            '                        <div class="cd-answer-check block-have-inline-block">\n' +
            '                            <input class="cd-answer-checkbox" id="constructor-answer-checkbox1" type="checkbox"> </div>\n' +
            '                        <div class="cd-answer-text">\n' +
            '                                <input type="text" name="text-answer" placeholder="Ответ" required class="cd-answer-text-input">\n' +
            '                        </div>\n' +
            '                        <div class="cd-del-answer-icon-container">\n' +
            '                            <a href="#">\n' +
            '                                <div class="cd-del-answer-icon div-is-icon"></div>\n' +
            '                            </a>\n' +
            '                        </div>\n' +
            '                    </div>');
    });
});
$(function () {
    $(".buttons-of-question.button-edit-answer.popup-open-button-answers").click(function () {
            $('body').find('div.cd-answers-modal').find('div.block-questions-text').append(
                $(this).parents('div.block-questions.block-have-shadow.block-have-border').find('div.block-questions-text').text()
            );

            $(this).parents('div.block-questions.block-have-shadow.block-have-border').find('div.radio.form-input-question').find('label').each(function () {
                $('body').find('div.cd-answers-add.cd-answers-block').append(
                    '<div class="cd-answer-container  block-have-border block-have-shadow">\n' +
                    '                            <div class="cd-answer-check block-have-inline-block">\n' +
                    '                                <input class="cd-answer-checkbox" id="constructor-answer-checkbox1" type="checkbox"> </div>\n' +
                    '                            <div class="cd-answer-text">\n' +
                    '                                    <input type="text" name="text-answer" ' + 'value="' + $.trim($(this).text()) + '" placeholder="Ответ" required class="cd-answer-text-input">\n' +
                    '                            </div>\n' +
                    '                            <div class="cd-del-answer-icon-container">\n' +
                    '                                <a href="#">\n' +
                    '                                    <div class="cd-del-answer-icon div-is-icon"></div>\n' +
                    '                                </a>\n' +
                    '                            </div>\n' +
                    '                        </div>'
                )
            });
        }
    );
});