import aiml

# Create the kernel and learn AIML files
kernel = aiml.Kernel()
kernel.verbose(False)
kernel.learn("std-startup.xml")
kernel.respond("load aiml b")
