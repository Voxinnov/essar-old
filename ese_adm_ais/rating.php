      <?php
if(isset($_POST['submit']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$ratings = $_POST['ratings'];
$link = mysqli_connect("localhost", "root", "", "imakr");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$res = mysqli_query($link, "insert into imakr.customer_review(name, email, comments, ratings) values('$name','$email','$comments', '$ratings')");

    if($res)
    {
        echo "Your feedback is saved";
    }
    else
    {
        echo " OOPs!! there is some error. Please check the fields";
    }

}
?>

<form id="customer_review" name="cust_rev"action="" method="post" onsubmit="return validate()">
  <table width="535" border="0">
    <tr>
      <td>Rate This Product:
      </td>
      <td>
      <span id="rateStatus">Rate Me...</span>
<span id="ratingSaved">Rating Saved!</span> 

<div id="rateMe" title="Rate Me...">
    <a onclick="rateIt(this)" id="_1" title="Poor" onmouseover="rating(this)" onmouseout="off(this)"><span class="ratings">1</span></a>
    <a onclick="rateIt(this)" id="_2" title="Not Bad" onmouseover="rating(this)" onmouseout="off(this)"><span class="ratings">2</span></a>
    <a onclick="rateIt(this)" id="_3" title="Pretty Good" onmouseover="rating(this)" onmouseout="off(this)"><span class="ratings">3</span></a>
    <a onclick="rateIt(this)" id="_4" title="Excellent" onmouseover="rating(this)" onmouseout="off(this)"><span class="ratings">4</span></a>
    <a onclick="rateIt(this)" id="_5" title="Marvellous" onmouseover="rating(this)" onmouseout="off(this)"><span class="ratings">5</span></a>
</div>
      </td>
    </tr>
    <tr>
      <td width="129"><span class="titles">Name</span><span class="star">*</span>:</td>
      <td width="396"><label for="name"></label>
      <input type="text" name="name" id="name" /></td>
    </tr>
    <tr>
      <td><span class="titles">Email</span><span class="star">*</span>:</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td height="61">Comments:</td>
      <td><label for="comments"></label>
      <textarea name="comments" id="comments" cols="45" rows="5" onchange="maxlength('comments', 500)"></textarea></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>