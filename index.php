<?php
include 'layouts/_header.php';
require 'server/function.php';
?>
<section id="articles">
    <div class="section_title">
        <h2>Articles</h2>
    </div>
    <div class="cards">
        <div class="card animate__animated animate__backInLeft">
            <div class="card_picture">
                <img src="assets/images/airmax.jpg" alt="">
            </div>
            <div class="card_content">
                <div class="card_title">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </div>
                <div class="card_body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquid a
                        voluptatibus, quo consequuntur, accusantium in, dolor maiores repellendus magni delectus
                        voluptas
                        nisi
                        quis hic accusamus itaque unde id laborum.
                    </p>
                </div>
                <div class="card_footer">
                    <a href="" class="btn-like">
                        <i class="far fa-thumbs-up"><span class="like_count">0</span></i>
                    </a>
                    <p>Writed on : <?php echo getRandomDate(); ?></p>
                </div>
            </div>
        </div>
        <div class="card animate__animated animate__backInLeft">
            <div class="card_picture">
                <img src="assets/images/jordans.jpg" alt="">
            </div>
            <div class="card_content">
                <div class="card_title">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </div>
                <div class="card_body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquid a
                        voluptatibus, quo consequuntur, accusantium in, dolor maiores repellendus magni delectus
                        voluptas
                        nisi
                        quis hic accusamus itaque unde id laborum.
                    </p>
                </div>
                <div class="card_footer">
                    <a href="" class="btn-like">
                        <i class="far fa-thumbs-up"><span class="like_count">0</span></i>
                    </a>
                    <p>Writed on : <?php echo getRandomDate(); ?></p>
                </div>
            </div>
        </div>
        <div class="card animate__animated animate__backInLeft">
            <div class="card_picture">
                <img src="assets/images/airmax.jpg" alt="">
            </div>
            <div class="card_content">
                <div class="card_title">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </div>
                <div class="card_body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquid a
                        voluptatibus, quo consequuntur, accusantium in, dolor maiores repellendus magni delectus
                        voluptas
                        nisi
                        quis hic accusamus itaque unde id laborum.
                    </p>
                </div>
                <div class="card_footer">
                    <a href="" class="btn-like">
                        <i class="far fa-thumbs-up"><span class="like_count">0</span></i>
                    </a>
                    <p>Writed on : <?php echo getRandomDate(); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="section_title">
        <h2>Let a comment</h2>
    </div>
    <form action="server/form.php" class="form_contact">
        <div class="section_title">
            <?php if (isset($_GET['error'])) { ?>  
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>
        </div>
        <div class="field">
            <label for="email" class="label">Email*</label>
            <input id="email" name="email" class="input" type="text">
        </div>
        <div class="field">
            <label for="comment" class="label">Comment*</Label>
            <textarea id="comment" name="comment" class="input" type="text" rows="10"></textarea>
        </div>
        <div class="submit">
            <button type="submit" class="btn">Send</button>
        </div>
    </form>
</section>
<?php include 'layouts/_footer.php'; ?>