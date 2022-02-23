package urls;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

public class UrlManager {

	public static List<Url> getAllUrl() throws IOException {
		Document doc = Jsoup.connect("https://mlp.fandom.com/wiki/Characters").get();
		Elements td= doc.select("td > a[href]");
		List<Url> l = new ArrayList<>();
		
		for(Element e : td) {
			if(!e.text().equals("*")) {
				l.add(new Url(e.attr("abs:href")));
			}
		}
		return l;
	}
}
