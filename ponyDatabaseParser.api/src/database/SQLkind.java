package database;

public class SQLkind {
	int id;
	String kind;
	
	public SQLkind(int i, String k) {
		this.id = i;
		this.kind = k;
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
	public String getKind() {
		return kind;
	}
	
	
}
