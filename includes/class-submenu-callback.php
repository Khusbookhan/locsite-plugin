
<h1>locksite page</h1>

<form method="POST">
    <label for="awesome_text">  ENABLE LOCK SITE</label>
    <input type="checkbox" name="awesome_text" id="awesome_text" value="<?php echo $value; ?>">
    

    <br>
    <br>
<!-- <label for="page-selector">PAGE SELECTOR</label>
<select name="Page Selector" id="pages" multiple>
  <option value="page1">page1</option>
  <option value="page2">page2</option>
  <option value="page3">page3</option>
  <option value="page4">page4</option>
</select> -->
<h1>Page Selector</h1>
<select>
<?php // Query for listing all pages in the select box loop
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query( array(
    'post_type' => 'page',
    'posts_per_page' => -1
));

foreach ($all_wp_pages as $value){
    $post = get_page($value);
    $title = $post->post_title;
    $id = $post->ID;

    // For example
    // <option value="pageId32">Page title</option>

    echo '<option value="pageId' . $id. '">' . $title . '</option>';

}; ?>

</select>

<br>
<br>



<label for="country-selector">COUNTRY SELECTOR</label>
<select name="Page Selector" id="pages" multiple>
  <option value="country1">Pakistan</option>
  <option value="country2">Bangladesh</option>
  <option value="country3">Saudia Arabia</option>
  <option value="country4">Iran</option>
</select>
   
</form>