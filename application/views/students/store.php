<div class="container">
    <h1>
        <?= $title ?>
    </h1>
</div>
<section class="container">
    <form>
        <fieldset>
            
            <div class="form-group">
                <label for="student_name">Student Name</label>
                <input type="text" class="form-control" id="student_name" aria-describedby="studentHelp" placeholder="Student Name">
            </div>

            <div class="form-group">
                <label for="student_email">Student Email</label>
                <input type="email" class="form-control" id="student_email" aria-describedby="studentHelp">
                <!-- <small id="studentHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <select class="form-control" id="course">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
</section>