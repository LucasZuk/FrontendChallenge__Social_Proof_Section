<?php /************** RATING OBJECT ****************/

class Rating 
{
	private $_rating_value ="";
	private $_rating_score="0";

	public function publish_rating ($_rating_value, $_rating_score) 
	{
		$this->_rating_value = $_rating_value;
		$this->_rating_score = $_rating_score;

		echo '<div class="rating_box">';
		 for($i=1; $i<= $this->_rating_score; $i++)
			{

				echo 
				'<img 	class="rating_star" 
						src=\'./images/icon-star.svg\'
						alt=\'rating_star_image\' 
				>';
			}

		echo '<p class=\'rating_text\'>' . $this->_rating_value . '</p></div>';
		
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