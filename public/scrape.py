#! python2.7
# scrape.py - Scrapes google and wikipedia for questions

import  sys, requests, lxml, os
from bs4 import BeautifulSoup


def getPage(url):
    if (url):

        res = requests.get(url)

        try:
            res.raise_for_status()
        except Exception as exc:
            print('There was a problem: %s' %(exc))

        webPage = open('webpage.html', 'wb+')
        for chunk in res.iter_content(100000):
            webPage.write(chunk)
        webPage.close

        return webPage
    else:
        return false


def wikipediaScraper(url):

    if(getPage(url))
        soup = BeautifulSoup(open("webpage.html",'r'),"lxml")
        title = soup.title.string

        contentDiv = soup.find(id = "mw-content-text")
        return contentDiv.p.get_text()
    else:
         return false


def googleScraper(searchFor):

    # Search google for query
    if(getPage('https://www.google.com/search/q=' + "_".join(searchFor.split()))):

        # See if wikipedia result is present
        # Scrape wikipedia page if found
        # Return google result else

query = "what is a bot"
googleScraper(query)
# print wikipediaScraper('https://en.wikipedia.org/wiki/Game_of_Thrones')
