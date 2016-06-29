from nltk.tag import pos_tag

class NLP: 

	def extractProperNouns(text):
		taggedWords = pos_tag(text.split())
		properNouns = [word for word,pos in taggedWords if pos == 'NNP']
		return properNouns 
	
	def hello():
		print('hello')
	
	

