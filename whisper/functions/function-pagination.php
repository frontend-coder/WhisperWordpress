<?php


//Добавление кнопки разрыва страницы в Виз.Редактор TyniMCE
add_filter('mce_buttons', 'mce_page_break');
function mce_page_break( $mce_buttons ){
	$pos = array_search('wp_more', $mce_buttons, true);

	if( $pos !== false ) {
		$buttons = array_slice( $mce_buttons, 0, $pos );
		$buttons[] = 'wp_page';
		$mce_buttons = array_merge( $buttons, array_slice($mce_buttons, $pos) );
	}

	return $mce_buttons;
}


if (!function_exists('pagination')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function pagination() { // функция вывода пагинации
		global $wp_query; // текущая выборка должна быть глобальной
		$big = 999999999; // число для замены
		$links = paginate_links(array( // вывод пагинации с опциями ниже
			'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
			'format' => '?paged=%#%', // формат, %#% будет заменено
			'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
			'type' => 'array', // нам надо получить массив
			'prev_text'    => '« ', // текст назад
	    	'next_text'    => ' »', // текст вперед
			'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
			'show_all'     => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
			'end_size'     => 5, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
			'mid_size'     => 5, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
			'add_args'     => false, // массив GET параметров для добавления в ссылку страницы
			'add_fragment' => '',	// строка для добавления в конец ссылки на страницу
			'before_page_number' => '', // строка перед цифрой
			'after_page_number' => '' // строка после цифры
		));
	 	if( is_array( $links ) ) { // если пагинация есть
		    echo '<ul class="pagination">';
		    foreach ( $links as $link ) {
		    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>"; // если это активная страница
		        else echo "<li>$link</li>";
		    }
		   	echo '</ul>';
		 }
	}
}



/**
 * Альтернатива wp_link_pages  <!--nextpage-->
 * ver: 1.0
 */
function kama_link_pages(){

	## Настройки ================
	$text_num_page   = ''; // Текст для количества страниц. {current} заменится текущей, а {last} последней. Пример: 'Страница {current} из {last}' = Страница 4 из 60
	$num_pages       = 10; // сколько ссылок показывать
	$stepLink        = 10; // после навигации ссылки с определенным шагом (значение = число (какой шаг) или '', если не нужно показывать). Пример: 1,2,3...10,20,30
	$dotright_text   = '…'; // промежуточный текст "до".
	$dotright_text2  = '…'; // промежуточный текст "после".
	$backtext        = '« '; // текст "перейти на предыдущую страницу". Ставим '', если эта ссылка не нужна.
	$nexttext        = ' »'; // текст "перейти на следующую страницу". Ставим '', если эта ссылка не нужна.
	$first_page_text = '«« '; // текст "к первой странице" или ставим '', если вместо текста нужно показать номер страницы.
	$last_page_text  = ' »»'; // текст "к последней странице" или пишем '', если вместо текста нужно показать номер страницы.
	## / Настроек ================

	global $page, $numpages;

	$paged    = (int) $page;
	$max_page = $numpages;

	if( $max_page <= 1 )
		return false; // если навигация не нужна

	if( empty($paged) || $paged == 0) $paged = 1;

	$pages_to_show         = intval($num_pages);
	$pages_to_show_minus_1 = $pages_to_show-1;

	$half_page_start = floor($pages_to_show_minus_1/2); // сколько ссылок до текущей страницы
	$half_page_end   = ceil($pages_to_show_minus_1/2); // сколько ссылок после текущей страницы

	$start_page = $paged - $half_page_start; // первая страница
	$end_page   = $paged + $half_page_end; // последняя страница (условно)

	if( $start_page <= 0)
		$start_page = 1;

	if( ($end_page - $start_page) != $pages_to_show_minus_1 )
		$end_page = $start_page + $pages_to_show_minus_1;

	if( $end_page > $max_page ){
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page   = (int) $max_page;
	}

	if( $start_page <= 0 ) $start_page = 1;

	// вывод
	$out = '<div class="wp-pagenavi_page">'. "\n";

		if( $text_num_page ){
			$text_num_page = preg_replace ('!{current}|{last}!', '%s', $text_num_page );
			$out .= sprintf ("<span class='pages'>$text_num_page</span>", $paged,$max_page );
		}

		if( $backtext && $paged != 1 )
			$out.= _wp_link_page($paged-1) . $backtext .'</a>';

		if( $start_page >= 2 && $pages_to_show < $max_page ) {
			$out .= _wp_link_page(1) . ( $first_page_text ?: 1 ) .'</a>';
			if( $dotright_text && $start_page != 2 )
				$out.= '<span class="extend">'. $dotright_text .'</span>';
		}

		for( $i = $start_page; $i <= $end_page; $i++ ){
			if( $i == $paged )
				$out .= '<span class="current">'. $i .'</span>';
			else
				$out .= _wp_link_page($i) . $i .'</a>';

		}

		//ссылки с шагом
		if( $stepLink && $end_page < $max_page ){
			for( $i=$end_page+1; $i<=$max_page; $i++ ){
				if( $i % $stepLink == 0 && $i !== $num_pages ){
					if( ++$dd == 1 )
						$out.= '<span class="extend">'. $dotright_text2 .'</span>';
					$out .= _wp_link_page($i) . $i .'</a>';
				}
			}
		}

		if( $end_page < $max_page ) {
			if( $dotright_text && $end_page != ($max_page-1) )
				$out.= '<span class="extend">'. $dotright_text2 .'</span>';
			$out .= _wp_link_page($max_page) . ( $last_page_text ?: $max_page ) .'</a>';
		}

		if( $nexttext && $paged != $end_page )
			$out .= _wp_link_page($paged+1) . $nexttext .'</a>';

	$out .= '</div>';

	return $out;
}




?>