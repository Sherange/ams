<section>
    <div class="banner-wrapper">
        <h1>
            <?= $title ?>
        </h1>
    </div>
</section>
<section>
    <div class="student-wrapper">
        <?php foreach ($data as $item) : ?>
        <div class="container">
            <hr>
            <div class="float-right">
                <a class="btn btn-success" href="students/<?= $item['students_id']; ?>">View Student Details</a>
                <a class="btn btn-info" href="students/<?= $item['students_id']; ?>">Edit Student Details</a>
            </div>
            <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="/assets/img/profile.jpeg" alt="profile-image" class="img-thumbnail">
                </div>
                <div class="col-4">
                    <h3>
                        <?= $item['name'] ?>
                    </h3>
                    <p>
                        <?= $item['email'] ?>
                    </p>
                    <samll class="created_at">
                        <?= $item['created_at'] ?>
                    </samll>
                </div>
                <div class="col-4">
                    <h2>
                        <span class="badge badge-info">Info</span>
                    </h2>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>