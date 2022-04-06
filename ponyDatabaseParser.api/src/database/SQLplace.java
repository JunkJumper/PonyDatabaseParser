package database;

public class SQLplace {
	int id;
	String place;
	
	public SQLplace(int i, String p) {
		this.id = i;
		this.place = p;
	}

	/**
	 * @return the id
	 */
	public int getId() {
		return id;
	}

	/**
	 * @return the kind
	 */
	public String getPlace() {
		return place;
	}
	
	
}
