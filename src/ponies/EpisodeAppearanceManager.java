package ponies;

public class EpisodeAppearanceManager {

	protected static int stringToSeason(String s) {
		int r = 0;
		switch (s.split(" ")[1]) {
		case "one": {
				r = 1;
			}
		case "two": {
				r = 2;
			}
		case "three": {
				r = 3;
			}
		case "four": {
				r = 4;
			}
		case "five": {
				r = 5;
			}
		case "six": {
				r = 6;
			}
		case "seven": {
				r = 7;
			}
		case "eight": {
				r = 8;
			}
		case "nine": {
				r = 9;
			}
		default:{
			}
		return r;
		}
	}
	
	protected EpisodeAppearance createEpisodeAppearance(String season, String episode, String appears) {
		if(appears.equals("Y") || appears.equals("S")) {
			return new EpisodeAppearance(stringToSeason(season), Integer.parseInt(episode), true);
		} else {
			return new EpisodeAppearance(stringToSeason(season), Integer.parseInt(episode), false);
		}

	}
}
