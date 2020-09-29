<? /************** RATING OBJECT ****************/

class Rating {
	private $rating_value;
	private $rating_score;
	
	constructor() {
		this.color = '';
	}

	public function publish_rating () 
	{
		echo for($i=1, $i<$rating_score, $i++){
			'<img 	class=\'rating_star\' 
					src=\'\/images\/icon-star.svg\'
					alt=\'rating_star_image\' 
			>
			<p>' . $rating_value . '</p>'
		}
	}
}