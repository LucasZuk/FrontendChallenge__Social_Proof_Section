class TestimonyBox
{
	constructor(testimonyName, testimonyApproval, testimonyComment, testimonyPhoto)
	{
		this.testimonyName =testimonyName;
		this.testimonyApproval = testimonyApproval;
		this.testimonyComment = testimonyComment;
		this.testimonyPhoto = testimonyPhoto;
	}

	setTestimonyApproval(testimonyApproval)
	{
		if (testimonyApproval){
			return "Verified buyer";
		}
		else
		{
			return "Unverified buyer";
		}
	}

	publishTestimony()
	{
		let testimony = document.getElementById("testimony");
		let testimonyBox = document.createElement("div");
		let testimonyProfil = document.createElement("div");
		let testimonyPhoto = document.createElement("img");
		let testimonyIdentity = document.createElement("div");
		let testimonyName = document.createElement("h3");
		let testimonyComment = document.createElement("p");
		let testimonyApproval = document.createElement("p");

		testimonyBox.className = "testimony_box";
		testimonyProfil.className = "testimony_profil";
		testimonyPhoto.className = "testimony_photo";
		testimonyPhoto.src = "./images/" + this.testimonyPhoto;
		testimonyPhoto.alt = " Profil picture of " + this.testimonyName;
		testimonyIdentity.className = "testimony_identity";
		testimonyName.className = "testimony_name";
		testimonyName.innerText = this.testimonyName;
		testimonyComment.className = "testimony_comment";
		testimonyComment.innerText = this.testimonyComment;
		testimonyApproval.className = "testimony_approval";
		testimonyApproval.innerText = this.setTestimonyApproval(this.testimonyApproval);

		testimony.append(testimonyBox);
			testimonyBox.append(testimonyProfil);
				testimonyProfil.append(testimonyPhoto);
				testimonyProfil.append(testimonyIdentity);
					testimonyIdentity.append(testimonyName);
					testimonyIdentity.append(testimonyApproval);
			testimonyBox.append(testimonyComment);
	}
}

const colton = new TestimonyBox('Colton Smith', true ,'"We needed the same printed design as the one we had ordered a week prior. Not only did they find the original order, but we also received it in time. Excellent!"', "image-colton.jpg");
colton.publishTestimony();

const irene = new TestimonyBox('Irene Roberts', false ,'"Customer service is always excellent and very quick turn around. Completely delighted with the simplicity of the purchase and the speed of delivery."', "image-irene.jpg" );
irene.publishTestimony();

const anne = new TestimonyBox('Anne Wallace', true ,'"Put an order with this company and can only praise them for the very high standard. Will definitely use them again and recommend them to everyone!"', "image-anne.jpg" );
anne.publishTestimony();