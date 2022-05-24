<?php foreach ($main_content as $data) : ?>
    <div class="frequent-questions">
        <div class="question">
            <h2>
                <?= $data['question'] ?>
            </h2>
        </div>
        <div class="answer">
            <p>
                <?= $data['answer'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>
<!-- /.frequent-questions -->