
import time

start = time.time()

total = 0

for x in range(900000000):
    total += x    

else:
    print (total) 

end = time.time()

#Subtract Start Time from The End Time
total_time = end - start
print("\n"+ str(total_time), "seconds") # 82.15445041656494 seconds


# rig: Dell PowerEdge T110-II (3.1 GHz/core x4) / php8.1-fpm