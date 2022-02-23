package ponies;

public class EpisodeAppearance {
	private int episode;
	private int season;
	private boolean appears;
	
	public EpisodeAppearance(int e, int s, boolean a) {
		this.episode = e;
		this.season = s;
		this.appears = a;
	}
	
	public int getEpisode() {
		return episode;
	}
	public int getSeason() {
		return season;
	}
	public boolean isInEpisode() {
		return appears;
	}
	
	
}
