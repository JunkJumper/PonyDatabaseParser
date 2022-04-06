package ponies;

import java.io.IOException;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;

import urls.Url;
import urls.UrlManager;

public class CharacterManager {
	
	public static List<Character> createCharacters() throws IOException {
		List<Character> l = new ArrayList<>();
		int i = 1;
		int max = UrlManager.getAllUrl().size();
		for(Url u : UrlManager.getAllUrl()) {
			
			l.add(new Character(getName(u),
						getDesc(u),
						getKinds(u),
						getResidences(u),
						new Url(getImageUrl(u))
					)
				);
			System.out.println("Parsing " + getName(u) + " ("+i+"/"+max+")");
			i++;
		}
		return l;
	}
	
	private static String getName(Url url) throws IOException {
		return Jsoup.connect(url.getUrl()).get().selectFirst("h1").text();
	}

	private static String getDesc(Url url) throws IOException {
		return Jsoup.connect(url.getUrl()).get().select("div.mw-parser-output > p").get(0).text();
	}
	
	private static List<String> getKinds(Url url) throws IOException {
		List<String> kinds = new ArrayList<>();
		List<String> k = new ArrayList<>();
		Document doc = Jsoup.connect(url.getUrl()).get();
		Element tableSelector = doc.select("td:contains(Kind)").next().first();
		
		if(tableSelector != null) {
			
			String a = tableSelector.text().replace("-", "0");
			String[] tabString = a.split("[(][a-zA-Z0-9\\s]*[)]");//regex to remove the episode from kinds
			
			for(String s : tabString) {
				k.add(s.split("[(]")[0]);
			}
			kinds = k;
		}
		return kinds;
	}
	
	private static List<String> getResidences(Url url) throws IOException {
		List<String> residences = new ArrayList<>();
		Document doc = Jsoup.connect(url.getUrl()).get();
		Element residenceSelector = doc.select("td:contains(Residence)").next().first();
		
		if(residenceSelector != null) {
			
			String a = residenceSelector.text().replaceAll("-", "").replaceAll(", S", "");
			String[] tabString = a.split("[(][a-zA-Z0-9\\s]*[)]");//regex to remove the episode from residences
			
			residences = new ArrayList<>(Arrays.asList(tabString));
		}
		
		return residences;
	}
	
	private static String getImageUrl(Url url) throws IOException {
		
		Document doc = Jsoup.connect(url.getUrl()).get();
		Element imgSelector = doc.select("div.profile-image img").first();
		
		if(imgSelector != null) {
			return imgSelector.attr("src");
		} else {
			return null;
		}
	}
	
}
