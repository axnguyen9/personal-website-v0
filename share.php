<?php
include("includes/init.php");
$share = "highlight";

$show_form = TRUE;

$show_color_feedback = FALSE;
$show_pronouns_feedback = FALSE;
$show_story_feedback = FALSE;
$show_trigger_feedback = FALSE;

$color = '';
$pronouns = '';
$story_input = '';
$trigger = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $is_share_valid = TRUE;

  $color = filter_input(INPUT_POST, "color", FILTER_SANITIZE_STRING);
  if(empty($color)) {
    $is_share_valid = FALSE;
    $show_color_feedback = TRUE;
  }

  $pronouns = filter_input(INPUT_POST, "pronouns", FILTER_SANITIZE_STRING);
  if(empty($pronouns)) {
    $is_share_valid = FALSE;
    $show_pronouns_feedback = TRUE;
  }

  $story_input = filter_input(INPUT_POST, "story", FILTER_SANITIZE_STRING);
  if(empty($story_input) || strlen($story_input) < 100 || strlen($story_input) > 2000) {
    $is_share_valid = FALSE;
    $show_story_feedback = TRUE;
  }

  $trigger = filter_input(INPUT_POST, "trigger", FILTER_SANITIZE_STRING);
  if(empty($trigger)) {
    $is_share_valid = FALSE;
    $show_trigger_feedback = TRUE;
  }

  $show_form = !$is_share_valid;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Anna Nguyen</title>

  <link rel="stylesheet" type="text/css" href="./styles/sharestyle.css" media="all" />
  <link rel="stylesheet" type="text/css" href="./styles/allstyle.css" media="all" />
</head>

<body>
  <header>
    <?php include("includes/header.php"); ?>
  </header>

  <div class="banner">
    <section>
      <h1>S H A R E</h1>
    </section>
  </div>

  <div class="form title">

      <h2>W h a t ' s &nbsp; Y o u r &nbsp; S t o r y ?</h2>
      <main>
      <?php
      if($show_form) { ?>

      <div class="instructions">
        <h3>Feel free to share why/how you got into tech, what it means to you, moments of struggle or triumph, a favorite memory . . . Stories range far and wide across different people. You don't need to be involved with tech to have a story! </h3>
        <h4><em>All stories anonymous, coded under a favorite color and a pronoun.</em></h4>
      </div>

      <form method="POST" action="./share.php" novalidate>

      <div class="color">
        <?php if($show_color_feedback) {
        ?>
        <p class="form_feedback"> Please type a color.</p>
        <?php } ?>

        <label for="color">Favorite color: </label>
        <input type="text" name="color" id="color" value="<?php echo htmlspecialchars((isset($color)) ? $color : ''); ?>">
      </div>

      <div class="pronoun">
        <?php if($show_pronouns_feedback) {
        ?>
        <p class="form_feedback">Please pick a pronoun.</p>
        <?php } ?>

        <label for="pronoun">Pronouns: </label>
        <select name="pronouns" id="pronoun">
          <option value="other" <?php if($pronouns == "other") { ?> selected <?php ;} ?>>other</option>
          <option value="they/them/their" <?php if($pronouns == "they/them/their") { ?> selected <?php ;} ?>>they/them/their</option>
          <option value="she/her/hers" <?php if($pronouns == "she/her/hers") { ?> selected <?php ;} ?>>she/her/hers</option>
          <option value="he/him/his" <?php if($pronouns == "he/him/his") { ?> selected <?php ;} ?>>he/him/his</option>
        </select>
      </div>

      <div class="story_input">
        <?php if($show_story_feedback) {
        ?>
        <p class="form_feedback">Share a thought, memory, quote, goal, word of advice, etc! Everything is anonymous :) </p>
        <?php } ?>

        <label for="story">Your story: </label>
        <textarea id="story" name="story" rows="30" cols="60" minlength="100" maxlength="2000" ><?php echo htmlspecialchars((isset($story_input)) ? $story_input : ''); ?></textarea>
      </div>


      <div class="trigger">
        <?php if($show_trigger_feedback) {
        ?>
        <p class="form_feedback">Please check if your story has any triggers.</p>
        <?php } ?>

        <p>Trigger warning: </p>
        <h6>Please consider if your story contains trigger warnings so we can ensure the safety and wellbeing of others. Trigger warnings include but are not limited to sensitive, offensive, or graphic content (e.g. sexual assault/abuse, violence, self-harm, eating disorders, and more).</h6>
        <label for="yes"><input type="radio" id="yes" name="trigger" value="yes" <?php if($trigger  == "yes") { ?> checked <?php ;} ?>>yes
        </label>
        <label for="no"><input type="radio" id="no" name="trigger" value="no" <?php if($trigger == "no") { ?> checked <?php ;} ?>>no
        </label>
      </div>


      <div class="submit">
        <input type="submit" value="share" class="submit_button">
      </div>

      </form>
      <?php } else { ?>
          <h5>Hey, <?php echo htmlspecialchars($color)?> (<?php echo htmlspecialchars($pronouns)?>): </h5>
          <h5>Thank you for sharing your story! <br><?php echo htmlspecialchars($story_input)?></h5>
          <h5>Trigger: <?php echo htmlspecialchars($trigger)?></h5>
        <?php } ?>

    </main>

    <section class="source">
      <!-- Source: https://www.flickr.com/photos/144034721@N02/48976459278/in/album-72157711541423971/ -->
      <cite><a href="https://www.flickr.com/photos/144034721@N02/48976459278/in/album-72157711541423971/">profile pic source</a></cite>
    </section>
  </div>

  <footer>
    <?php include("includes/footer.php"); ?>
  </footer>
</body>

</html>
