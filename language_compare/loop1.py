import time

start = time.time()
total = 0

for x in range(1000000000):
    total += x
else:
    print ("Count reached: " + str(total))

end = time.time()

#Subtract Start Time from The End Time
total_time = end - start
print("Time taken by program in Python is: "+ str(total_time), "seconds")

# rig: Dell PowerEdge T110-II (3.1 GHz/core x4 - 4GB Ram)
# Time taken by program in Python is: 96.16518974304199 seconds
