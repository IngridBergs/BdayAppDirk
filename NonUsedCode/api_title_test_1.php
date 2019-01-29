<?php
    if (isset($_POST['submit']) )
     {
        $keyword = $_POST['keyword'];

        if (empty($keyword))
        {
            $response = array(
                  "type" => "error",
                  "message" => "Please enter the keyword."
                );
        }
    }

?>
<h2>Search Videos by keyword using YouTube Data API V3</h2>
<div class="search-form-container">
    <form id="keywordForm" method="post" action="">
        <div class="input-row">
            Search Keyword : <input class="input-field" type="search"
                id="keyword" name="keyword"
                placeholder="Enter Search Keyword">
        </div>

        <input class="btn-submit" type="submit" name="submit"
            value="Search">
    </form>
</div>

<?php
if(!empty($response)) {
?>
<div class="response <?php echo $response["type"]; ?>
    ">
    <?php echo $response["message"]; ?>
</div>
<?php
}
?>
