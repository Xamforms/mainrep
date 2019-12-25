$(function () {
    $(".cd-new-answer-icon").click(function () {
        $('.cd-answers-add').append(writeQuestion(''));
    });
    bindDelete()
});
$(function () {
    $(".buttons-of-question.button-edit-answer.popup-open-button-answers").click(function () {

            $('.block-modal-questions-text').remove();
            $('.cd-answer-information.cd-answers-block').append('<div class="block-modal-questions-text">'+$(this).parents('div.block-questions.block-have-shadow.block-have-border').find('div.block-questions-text').text()+'</div>');

            $('.cd-answer-container.block-have-border.block-have-shadow').remove();
            $(this).parents('div.block-questions.block-have-shadow.block-have-border').find('div.radio.form-input-question').find('label').each(function () {
                $('.cd-answers-add.cd-answers-block').append(writeQuestion($.trim($(this).text())));
            });
        bindDelete()
        }
    );
});

function writeQuestion(questiontext){
    return '<div class="cd-answer-container  block-have-border block-have-shadow">\n' +
        '                            <div class="cd-answer-check block-have-inline-block">\n' +
        '                                <input class="cd-answer-checkbox" id="constructor-answer-checkbox1" type="checkbox"> </div>\n' +
        '                            <div class="cd-answer-text">\n' +
        '                                    <input type="text" name="text-answer" ' + 'value="' + questiontext + '" placeholder="Ответ" required class="cd-answer-text-input">\n' +
        '                            </div>\n' +
        '                            <div class="cd-del-answer-icon-container">\n' +
        '                                    <div class="cd-del-answer-icon div-is-icon"></div>\n' +
        '                            </div>\n' +
        '                        </div>';
}

function bindDelete (){
    $(".cd-del-answer-icon").click(function () {
        $(this).parents('div.cd-answer-container.block-have-border.block-have-shadow').remove();
    });
}