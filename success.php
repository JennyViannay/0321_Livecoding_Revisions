<?php include 'layouts/_header.php'; ?>
<section class="main">
    <div class="section_title">
        <p>Thank You <?php echo $_GET['email']; ?> for your message : <br><small>"<?php echo $_GET['comment']; ?>"</small></p>
    </div>
</section>
<?php include 'layouts/_footer.php'; ?>