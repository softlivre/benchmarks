class Loop1 {
    public static void main(String args[]) {
        long startTime = System.nanoTime();
        long j = 0;

        for (long i = 0; i < 1000000000; i++) {
            j += i;
            //System.out.println(i);
        }

        System.out.println("Count reached: " + j);

        long elapsedTime = System.nanoTime() - startTime;
        System.out.println("Time taken by program in JAVA in ms is: " + elapsedTime / 1000000);
    }
}

// rig: Dell PowerEdge T110-II (3.1 GHz/core x4 - 4GB Ram)
// Time taken by program in JAVA in ms is: 600

