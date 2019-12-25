jQuery(document).ready(function ($) {
    var formModal = $('.cd-constructor-modal')
        , formQuestion = formModal.find('#cd-question')
        , mainNav = $('.main-nav');
    //open modal
    mainNav.on('click', '.popup-open-button-new-question', function (event) {
        $(event.target).is(mainNav) && mainNav.toggleClass('is-visible');
        question_selected();
    });
    //close modal
    formModal.on('click', function (event) {
        if ($(event.target).is(formModal) || $(event.target).is('.cd-close-form')) {
            formModal.removeClass('is-visible');
        }
    });
    //ok modal
    formModal.on('click', function (event) {
        if ($(event.target).is(formModal) || $(event.target).is('.cd-close-question')) {
            formModal.removeClass('is-visible');
        }
    });
    //close modal when clicking the esc keyboard button
    $(document).keyup(function (event) {
        if (event.which == '27') {
            formModal.removeClass('is-visible');
        }
    });

    //тут почему-то происходит открытие окна добавления вопроса
    function question_selected() {
        mainNav.removeClass('is-visible');
        formModal.addClass('is-visible');
        formQuestion.addClass('is-selected');
    }

    //IE9 placeholder fallback
    //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html

});


jQuery(document).ready(function ($) {
    var formModal = $('.cd-answers-modal')
        , formAnswers = formModal.find('#cd-answers')
        , mainNav = $('.main-nav');
    //open modal
    mainNav.on('click', '.popup-open-button-answers', function (event) {
        $(event.target).is(mainNav) && mainNav.toggleClass('is-visible');
        answers_selected();
    });
    //close modal
    formModal.on('click', function (event) {
        if ($(event.target).is(formModal) || $(event.target).is('.cd-close-form')) {
            formModal.removeClass('is-visible');
        }
    });

    //unknown error
    formModal.on('click',function (event) {
        if ($(event.target).is('#cd-question') || $(event.target).is('.cd-close-answer')) {
            formAnswers.removeClass('is-visible');
        }
    });
    //close modal when clicking the esc keyboard button
    $(document).keyup(function (event) {
        if (event.which == '27') {
            formModal.removeClass('is-visible');
        }
    });

    function answers_selected() {
        mainNav.removeClass('is-visible');
        formModal.addClass('is-visible');
        formAnswers.addClass('is-selected');
    }
    //IE9 placeholder fallback
    //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html

});

