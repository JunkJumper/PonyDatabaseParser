package urls;

public class Url {
	private String url;
	
	public Url(String u) {
		this.url = u;
	}

	public String getUrl() {
		return url;
	}
	
	@Override
	public String toString() {
		return this.getUrl();
	}
}
