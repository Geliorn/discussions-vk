<?php
	$group_id = "160777369"; // ID группы
	$topic_id = "36757918"; // ID обсуждения
	$count = 100; // Количество комментариев, которое будет выведено
	$extended = 1; // Будут ли загружены профили
	$need_likes = 1; // Будут ли загружены лайки
	$sort = "asc"; // Отображаем с начала(asc) или конца(desc)
	$version = "5.4"; // Версия VK API (На текущий момент менять не нужно)


	$page = file_get_contents("https://api.vk.com/method/board.getComments?" . "group_id=" . $group_id . "&topic_id=" . $topic_id . "&count=" . $count . "&extended=" . $extended . "&need_likes=" . $need_likes . "&sort=" . $sort . "&v=" . $version);
	echo $page;
?>
