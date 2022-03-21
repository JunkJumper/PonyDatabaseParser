package ponies;

import java.util.List;

import urls.Url;

public class Character {
	private String name;
	private String description;
	private List<String> kind;
	private String gender;
	private List<String> residence;
	private Url image;
	
	public Character(String name, String description, List<String> kind, String gender, List<String> residence, Url image) {
		this.name = name;
		this.description = description;
		this.kind = kind;
		this.gender = gender;
		this.residence = residence;
		this.image = image;
	}

	public String getName() {
		return name;
	}

	public String getDescription() {
		return description;
	}

	public List<String> getKind() {
		return kind;
	}

	public String getGender() {
		return gender;
	}

	public List<String> getResidence() {
		return residence;
	}


	public Url getImage() {
		return image;
	}

	@Override
	public String toString() {
		return "Character [name=" + name + ", description=" + description + ", kind=" + kind + ", gender=" + gender
				+ ", residence=" + residence + ", image=" + image + "]";
	}
	
	
}
