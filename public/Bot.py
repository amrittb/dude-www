import aiml

class Chat:
	@staticmethod
	def Ask(question):
		# Create the kernel and learn AIML files
		kernel = aiml.Kernel()
		kernel.verbose(False)
		kernel.learn("std-startup.xml")
		kernel.respond("load aiml b")
		print kernel.respond(question)

	@staticmethod
	def hello():
		print "hello"
