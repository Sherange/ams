<section>
    <img src="/assets/img/home-banner.jpg" style="height:300px;" class="img-fluid" alt="Banner Image">
</section>

<section>
    <div class="container">
        <h1>
            <?= $title ?>
        </h1>
    </div>
</section>


<section class="container">
    <?php foreach ($data as $item) : ?>
    <div class="container">
        <h3>
            <?= $item['name'] ?>
        </h3>
        <p>
            <?= $item['email'] ?>
        </p>
        <samll class="created_at">
            <?= $item['created_at'] ?>
        </samll>
        <hr>
        <a class="btn btn-info float-right" href="students/<?= $item['students_id']; ?>">View Student Details</a>
        <br>
    </div>
    <?php endforeach; ?>
</section>