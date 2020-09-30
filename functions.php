<?php /************** RATING OBJECT ****************/

class Rating 
{
	private $_rating_value ="";
	private $_rating_score="0";

	public function publish_rating () 
	{
		 for($i=1; $i< $this->_rating_score; $i++)
			{

				echo 
				'<img 	class=\'rating_star\' 
						src=\'\.\/images\/icon-star.svg\'
						alt=\'rating_star_image\' 
				>';
			}

		echo '<p>' . $this->_rating_value . '</p>';
		
	}

	public function set_rating_value($_rating_value)
	{
		$this->_rating_value = $_rating_value;
	}

	public function set_rating_score($_rating_score)
	{
		$this->_rating_score = $_rating_score;
	}
}