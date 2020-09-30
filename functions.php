﻿<?php 

/************** RATING OBJECT ****************/
class Rating 
{
	private $_rating_value ="";
	private $_rating_score="0";

	public function publish_rating ($_rating_value, $_rating_score) 
	{
		$this->set_rating_value($_rating_value);
		$this->set_rating_score($_rating_score);

		echo '<div class="rating_box"><div class="rating_stars">';
		 for($i=1; $i<= $this->_rating_score; $i++)
			{

				echo 
				'<img 	class="rating_star"
						src=\'./images/icon-star.svg\'
						alt=\'rating_star_image\' 
				>';
			}

		echo '</div><p class=\'rating_text\'>' . $this->_rating_value . '</p></div>';
		
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


/************** TESTIMONY OBJECT ****************/
class Testimony 
{
	private $_testimony_name ="";
	private $_testimony_approval=false;
	private $_testimony_comment="";
	private $_testimony_photo="";

	public function set_testimony_name ($name)
	{
		$this->_testimony_name = $name;
	}

	public function set_testimony_approval ($approval)
	{
		if ($approval == true){
			$this->_testimony_approval = "Verified buyer";
		}
		else
		{
			$this->_testimony_approval = "Unverified buyer";
		}
		
	}

	public function set_testimony_comment ($comment)
	{
		$this->_testimony_comment = $comment;
	}

	public function set_testimony_photo ($photo)
	{
		$this->_testimony_photo = $photo;
	}

	public function publish_testimony ($_testimony_name, $_testimony_approval, $_testimony_comment, $_testimony_photo)
	{
		$this-> set_testimony_name ($_testimony_name);
		$this-> set_testimony_approval ($_testimony_approval);
		$this-> set_testimony_comment ($_testimony_comment);
		$this-> set_testimony_photo ($_testimony_photo);

		echo 	'<div class="testimony_box">
					<div class="testimony_profil">
						<img 	class="testimony_photo"
								src="./images/'. $this->_testimony_photo . '"
								alt="Pictures profil of '.$this->_testimony_name.'"
						>
						<div class="testimony_identity">
							<h3 class="testimony_name">'.$this->_testimony_name.'</h3>
							<p class="testimony_approval">'.$this->_testimony_approval.'</p>
						</div>
					</div>
					<p class="testimony_comment">'.$this->_testimony_comment.'</p>
				</div>';

	}
}