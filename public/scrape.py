#! python2.7
# scrape.py - Scrapes google and wikipedia for questions

import  sys, requests, lxml, os
from bs4 import BeautifulSoup
from selenium import webdriver

def getPage(url):
    if (url):

        res = requests.get(url)

        try:
            res.raise_for_status()
        except Exception as exc:
            error = 'There was a problem: %s' %(exc)
            return error

        # Write downloaded page in file webpage.html
        webPage = open('webpage.html', 'wb+')
        for chunk in res.iter_content(100000):
            webPage.write(chunk)
        webPage.close
        return True

    else:
        return False


def wikipediaScraper(url):

    if getPage(url):
        soup = BeautifulSoup(open("webpage.html",'r'),"lxml")
        title = soup.title.string

        contentDiv = soup.find(id = "mw-content-text")
        return contentDiv.p.get_text()
    else:
         return false


def googleScraper(searchFor):

    # Search google for query
    # url = 'https://www.google.com/search?q' + '+'.join(searchFor.split())
    url = 'http://www.google.com'
    print url
    driver = webdriver.Firefox()
    driver.get(url)
    print driver.page_source
        # See if wikipedia result is present
        # Scrape wikipedia page if found
        # Return google result else


print wikipediaScraper('https://en.wikipedia.org/wiki/Game_of_Thrones')
