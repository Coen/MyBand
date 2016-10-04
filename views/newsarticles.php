<?php

echo '<section>';

//fetch_assoc should not be in the view!
foreach ($result as $newsItem => $oneItem) {

	echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
	echo '<content>'.$oneItem['content'].'</content>';
	
	echo '</article>';
}

echo '</section>';
