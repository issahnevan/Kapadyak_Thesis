<?php

echo '<div class="post">';
if($rowCount['post_public'] == 'Y') {
    echo '<p class="public">';
    echo 'Public';
}else {
    echo '<p class="public">';
    echo 'Private';
}
echo '<br>';
echo '<span class="postedtime">' . $rowCount['post_time'] . '</span>';
echo '</p>';
echo '<div>';

echo '<a class="profilelink" href="profile.php?id=' . $rowCount['user_ID'] .'">' . $rowCount['first_name'] . ' ' . $rowCount['last_name'] . '<a>';
echo'</div>';
echo '<br>';
echo '<p class="caption">' . $rowCount['post_caption'] . '</p>';
echo '<center>'; 
$target = glob("data/images/posts/" . $rowCount['post_id'] . ".*");
if($target) {
    echo '<img src="' . $target[0] . '" style="max-width:580px">'; 
    echo '<br><br>';
}
echo '</center>';
echo '</div>';

?>