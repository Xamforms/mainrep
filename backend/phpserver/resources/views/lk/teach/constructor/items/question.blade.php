<div class="block-questions block-have-shadow block-have-border">
    <div class="block-questions-container">
        <div class="block-questions-section-and-score block-questions-style">
            <div class="block-questions-header block-questions-score block-have-inline-block">Балл: <span class="score-question">{{$question->getQuality()}}</span></div>
        </div>
        <div class="block-questions-question block-questions-style">
            <div class="block-questions-header">Вопрос:</div>
            <div class="block-questions-text">{{$question->getName()}}</div>
        </div>
        <div class="block-questions-answer block-questions-style">
            <div class="block-questions-header">Ответы:</div>
            <div class="block-questions-answer-container block-answers-text">
                <div class="radio form-input-question">
                    @foreach($question->getAnswers() as $answer)
                        <label><input type="radio" name="standing" value="{{$loop->index}}" {{$answer->getType()? "checked":""}}>{{$answer->getName()}}</label>
                    @endforeach
                </div>
            </div>
            <!--- <div class="block-questions-files">
            <div class="block-questions-header">Прикреплённые файлы: </div>
            <div class="block-questions-files-container"> </div>
        </div> ---></div>
    </div>
    <div class="block-questions-buttons main-nav">
        <form action="/lk/constructor/deleteQuestion" method="POST">
        <button type="submit" class="buttons-of-question button-delete-question" value="{{$loop->index}}">Удалить</button>
        </form>
        <button type="submit" class="buttons-of-question button-edit-question popup-open-button-new-question" value="{{$loop->index}}">Редактировать вопрос</button>
        <button type="submit" class="buttons-of-question button-edit-answer popup-open-button-answers" value="{{$loop->index}}">Редактировать ответы</button>
    </div>
</div>