import java.time.LocalDateTime;
import java.time.ZoneId;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Set;

public class DateTimeZoneConverter {
    
    private static final String DATE_FORMAT = "dd-MM-yyyy hh:mm:ss a z";
    private static final DateTimeFormatter formatter = DateTimeFormatter.ofPattern(DATE_FORMAT);
    public static ArrayList<ZoneId> zones = new ArrayList<>();
    public static ArrayList<Double> offset = new ArrayList<>();
    public static ZoneId fromTimeZone;
    public static ZoneId toTimeZone;
    
    public static void main(String args[]) {
        populateArrays();
        
        String firstarg = "";
            firstarg = args[0];
        
        Set<String> availableZones;
        availableZones = ZoneId.getAvailableZoneIds();
        if(availableZones.contains(firstarg)) {
           toTimeZone = ZoneId.of(firstarg);
        }
        fromTimeZone = ZoneId.of("Pacific/Auckland");
        LocalDateTime today = LocalDateTime.now();
        
        System.out.println(formatter.format(today.atZone(fromTimeZone)));
        System.out.println(formatter.format((today.atZone(fromTimeZone).withZoneSameInstant(toTimeZone))));
    }
    
    public static void populateArrays()
    {
    zones.add(ZoneId.of("Pacific/Niue"));//-11
    offset.add(-11.00);
    zones.add(ZoneId.of("Pacific/Honolulu"));//10
    offset.add(-10.00);
    zones.add(ZoneId.of("Pacific/Gambier"));//-9
    offset.add(-9.00);
    zones.add(ZoneId.of("Pacific/Pitcairn"));//-8
    offset.add(-8.00);
    zones.add(ZoneId.of("America/Phoenix"));//-7
    offset.add(-7.00);
    zones.add(ZoneId.of("Chile/EasterIsland"));//-6
    offset.add(-6.00);
    zones.add(ZoneId.of("America/Chicago"));//-5
    offset.add(-5.00);
    zones.add(ZoneId.of("America/New_York"));//-4
    offset.add(-4.00);
    zones.add(ZoneId.of("America/Argentina/Buenos_Aires"));//-3
    offset.add(-3.00);
    zones.add(ZoneId.of("Atlantic/South_Georgia"));//-2
    offset.add(-2.00);
    zones.add(ZoneId.of("Etc/GMT-1"));//-1
    offset.add(-1.00);
    zones.add(ZoneId.of("Iceland"));//0
    offset.add(0.00);
    zones.add(ZoneId.of("Africa/Kinshasa"));//+1/
    offset.add(1.00);
    zones.add(ZoneId.of("Africa/Johannesburg"));//+2
    offset.add(2.00);
    zones.add(ZoneId.of("Asia/Baghdad"));//+3
    offset.add(3.00);
    zones.add(ZoneId.of("Asia/Dubai"));//+4
    offset.add(4.00);
    zones.add(ZoneId.of("Indian/Maldives"));//+5
    offset.add(5.00);
    zones.add(ZoneId.of("Asia/Omsk"));//+6
    offset.add(6.00);
    zones.add(ZoneId.of("Asia/Krasnoyarsk"));//+7
    offset.add(7.00);
    zones.add(ZoneId.of("Australia/Perth"));//+8
    offset.add(8.00);
    zones.add(ZoneId.of("Asia/Tokyo"));//+9
    offset.add(9.00);
    zones.add(ZoneId.of("Pacific/Guam"));//+10
    offset.add(10.00);
    zones.add(ZoneId.of("Pacific/Noumea"));//+11
    offset.add(11.00);
    zones.add(ZoneId.of("Pacific/Auckland"));//+12
    offset.add(12.00);
    zones.add(ZoneId.of("Pacific/Apia"));//+13
    offset.add(13.00);
    zones.add(ZoneId.of("Pacific/Kiritimati"));//+14
    offset.add(14.00);
    }
}
