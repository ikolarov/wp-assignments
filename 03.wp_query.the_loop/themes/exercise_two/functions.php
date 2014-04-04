<?php
function exercise_one_print_posts( $query_vars ) {
	if ( !is_array($query_vars) ) {
		return;
	}

	$custom_query = new WP_Query($query_vars);

	if ( $custom_query->have_posts() ) :
		while ( $custom_query->have_posts() ) :
			$custom_query->the_post();
			$additional_post_classes = array(); 

			$additional_post_classes[] = $custom_query->current_post % 2 ? 'odd' : 'even'; // Add Odd Even class

			if ($custom_query->current_post === 0 ) {
				$additional_post_classes[] = 'first'; // Add first class on the first post
			}
			if ($custom_query->current_post === ($custom_query->post_count - 1) ) {
				$additional_post_classes[] = 'last'; // Add last class on the last post
			}
			?>

			<div <?php post_class($additional_post_classes); ?>>
				<!-- Заглавие (то трябва и да е линк към страницата с детайлен изглед на конкретния пост) -->
				<h3>
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_tag('website') ) { echo 'Web: '; } ?>
						<?php echo exercise_one_get_the_title(); ?>
						<?php if ( has_category('News') ) { echo '!'; } ?>
					</a>
				</h3>
				<small>
					<!-- Дата на публикуване -->
					Posted <?php echo human_time_diff( get_the_time('U') ); ?> ago
					<!-- Категории, в който е публикуван -->
					in Categories: <?php the_category(","); ?>
					<!-- Тагове, в които е тагнат -->
					<?php the_tags("with tags: ", ", "); ?>
					<!-- Автор -->
					by <?php the_author(); ?>
					<?php 
					$attachments = get_children(array('post_parent'=>get_the_ID(), 'post_mime_type' => 'image'));
					$images_count = count($attachments); ?>
					[<?php echo $images_count; ?> Images]
					[<?php echo $custom_query->current_post; ?> Post]
				</small>

				<div class="post-content">
					<!-- Съдържание -->
					<?php 
					$mycontent = wp_trim_words( get_the_content(), 20 );
					echo apply_filters( 'the_content', $mycontent ); ?>
				</div><!-- /.post-content -->
			</div>
		<?php
		endwhile;
	endif;
}

/*

Да няма никакъв inline CSS
Показват се заглавието, част от съдържанието, време, категориите, таговете и автора
Заглавието да е линк, който води към страницата с публикацията
Времето се изразява в периода, изминал от публикуването на поста до сегашния момент
Частта от съдържанието да бъдат първите 20 думи от него
Показва се броя снимки, прикачени към конкретния пост. Примери: 0 Images, или 1 Image, или 2 Images и т.н.
Всеки първи пост е в блок с фонов цвят: #ddd, Всеки втори пост е в блок с фонов свят #eee
Всички постове имат border-bottom: 1px solid #bbb и margin-bottom: 20px , с изключение на последния
Всички постове имат border-top: 1px solid #bbb, с изключение на първия
Ако постът се намира в категория News, да има удивителен (!) след заглавието
Ако постът се намира в таг website, преди заглавието да пише: “Web: “
	Ако си на Search Results страница и това, което се търси, се съдържа в заглавието, то да бъде в жълт фон – #ffe600

*/

function exercise_one_get_the_title () {
	$title = get_the_title();

	if ( is_search() ) {
		$title = preg_replace('/' . get_search_query() . '/i', "<span class=\"search-match\">$0</span>", $title);
	}

	return $title;
}