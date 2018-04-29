<?php
	add_action('init', 'sc_shortcodes');

	function sc_shortcodes() {
		add_shortcode('deliverable', 'sc_deliverable');
		add_shortcode('pull_quote', 'sc_pull_quote');
		add_shortcode('intro_p', 'sc_intro_paragraph');
		add_shortcode('p', 'sc_paragraph');
		add_shortcode('h', 'sc_header');
		add_shortcode('pdf_button', 'sc_pdf_button');
	}

	function sc_deliverable($atts) {
		extract(
			shortcode_atts(
				array(
					'img' => '',
					'number' => '',
					'text' => ''
				),
				$atts
			)
		);
		$output  = '<div class="services-deliverable relative">';
		$output .=		'<div class="services-deliverable-img">';
		$output .=			'<img class="img-responsive" src="' . $img . '">';
		$output .=		'</div>';
		$output .=		'<div class="services-deliverable-box services-deliverable-box- section-half bg">';
		$output .=			'<div class="col-sm-10 col-sm-offset-1">';
		$output .=				'<h3 class="mb40 text-white">' . $number . '</h3>';
		$output .= 				'<p class="text-white">' . $text . '</p>';
		$output .=			'</div>';
		$output .=			'<div class="clearfix"></div>';
		$output .=		'</div>';
		$output .=	'</div>';

		return $output;
	}

	function sc_intro_paragraph($atts, $content = null) {
		$output  = '<div class="container">';
		$output .= 	'<div class="row">';
		$output .= 		'<div class="col-sm-8 col-sm-offset-2">';
		$output .= 			'<div class="article-intro mb20">';
		$output .= 				'<p class="bold text-blue-light">' . $content . '</p>';
		$output .= 			'</div>';
		$output .= 		'</div>';
		$output .= 	'</div>';
		$output .= '</div>';

		return $output;
	}

	function sc_paragraph($atts, $content = null) {
		$output  = '<div class="container">';
		$output .= 	'<div class="row">';
		$output .= 		'<div class="col-sm-8 col-sm-offset-2">';
		$output .= 			'<p class="mb20">' . $content . '</p>';
		$output .= 		'</div>';
		$output .= 	'</div>';
		$output .= '</div>';

		return $output;
	}

	function sc_header($atts, $content = null) {
		$output  = '<div class="container">';
		$output .= 	'<div class="row">';
		$output .= 		'<div class="col-sm-8 col-sm-offset-2">';
		$output .= 			'<h3 class="mb20 mt20 text-blue-dark bold">' . $content . '</h3>';
		$output .= 		'</div>';
		$output .= 	'</div>';
		$output .= '</div>';

		return $output;
	}

	function sc_pull_quote($atts) {
		extract(
			shortcode_atts(
				array(
					'bg' => '',
					'text' => '',
					'name'	=> ''
				),
				$atts
			)
		);
		$output  = '<div class="article-body-quote bg-cover section mb40" style="background-image:url(' . $bg . ')">';
		$output .=	'<div class="row">';
		$output .=		'<div class="col-sm-8 col-sm-offset-2">';
		$output .= 			'<h2 class="text-white mb20">"';
		$output .= 				$text;
		$output .= 			'"</h2>';

		if ( $name != '' ) :

			$output .= 			'<p class="text-white">';
			$output .=				'- ' . $name;
			$output .=			'</p>';

		endif;

		$output .=		'</div>';
		$output .=	'</div>';
		$output .= 	'</div>';

		return $output;
	}

	function sc_pdf_button($atts) {
		extract(
			shortcode_atts(
				array(
					'link' => ''
				),
				$atts
			)
		);
		$output = '<div class="article-body-pdf text-center">
		<a href="' . $link . '" class="btn btn-outline btn-outline-orange">download as pdf</a>
	</div>';

		return $output;
	}

?>