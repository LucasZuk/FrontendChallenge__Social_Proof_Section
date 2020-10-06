class RatingBox
{
	constructor(ratingName, ratingScore){
		this.ratingName = ratingName;
		this.ratingScore = ratingScore;
	}
	
	publish_rating()
	{
		let rating = document.getElementById("rating");
		let ratingBox = document.createElement("div");
		let ratingStars = document.createElement("div");
		let ratingStar = document.createElement("img");
		let ratingName=document.createElement("p");
		let i=0;

		ratingBox.className = "rating_box";

		ratingStars.className= "rating_stars";

		ratingStar.className = "rating_star";
		ratingStar.src="./images/icon-star.svg";
		ratingStar.alt="rating_star_image";

		ratingName.className = "rating_text";
		if (this.ratingScore ==1 ){
			ratingName.innerText = "Rated 1 star in " + this.ratingName;
		}
		else{
			ratingName.innerText = "Rated " + this.ratingScore + " stars in " + this.ratingName;
		}


		rating.append(ratingBox);
		ratingBox.append(ratingStars);

		while (i<this.ratingScore){
			ratingStars.append(ratingStar.cloneNode());
			i++;
		}
		ratingBox.append(ratingName);
	}
}

const reviews = new RatingBox('Reviews', 5);
reviews.publish_rating();

const guru = new RatingBox('Report Guru', 5);
guru.publish_rating();

const bestTech = new RatingBox('BestTech', 5);
bestTech.publish_rating();

