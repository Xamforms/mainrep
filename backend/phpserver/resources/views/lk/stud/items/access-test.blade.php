<div class="block-tests-content" id="test-information{{"ID"}}">
    <div class="test-information-content block-have-inline-block">
        <div class="test-information-content-block block-have-inline-block">
            <div class="test-information-content-block-autor">Автор: <span
                        class="autor-test">{{"Unknown author"}}</span></div>
            <div class="test-information-content-block-name"><span class="name-of-tests">{{$allowed_test['name']}}</span></div>
            <div class="test-information-content-block-more">
                <div class="test-information-content-block-more-timer block-have-inline-block">Таймер: <span
                            class="timer-test">{{0}}</span> мин.
                </div>
                <div class="test-information-content-block-more-attempt block-have-inline-block test-information-content-block-more-element">
                    Попыток осталось: <span class="left-attempt-test">{{$allowed_test['attempts']}}</span></div>
                <div class="test-information-content-block-more-status block-have-inline-block test-information-content-block-more-element">
                    Статус: <span class="status-test">{{"-"}}</span></div>
                <div class="test-information-content-block-more-next-attempt block-have-inline-block test-information-content-block-more-element">
                    Дата создания: <span class="attempt-date-test">{{$allowed_test['creation_time']}}</span> в <span
                            class="attempt-time-test">{{$allowed_test['solution_time']}}</span></div>
            </div>
        </div>
        <div class="test-information-content-play block-have-inline-block">
            <form action="/constructor" method="GET">
                <input type="button" class="test-information-content-play-pic" name="constructor" value="edit">
            </form>
        </div>
    </div>
</div>
