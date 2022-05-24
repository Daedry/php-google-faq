<div class="infos d-flex j-space-b">
    <div class="left-side">
        <ul class="d-flex">
            <?php foreach ($footer['infos'] as $info) : ?>
                <li>
                    <?= $info ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- /.left-side -->

    <div class="right-side d-flex">
        <i class="fas fa-language"></i>
        <label for="language"></label>
        <select id="language">
            <?php foreach ($footer['languages'] as $data) : ?>
                <option value="<?= $data['code-lang'] ?>"><?= $data['language'] ?></option>
            <?php endforeach; ?>
            <option selected="" value=""><?= $lang_ita ?></option>
        </select>
    </div>
    <!-- /.right-side -->
</div>
<!-- /.infos -->