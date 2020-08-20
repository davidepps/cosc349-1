import java.time.LocalDateTime;
import java.time.ZoneId;
import java.time.format.DateTimeFormatter;
import java.util.Set;

public class LocalTimeZone {

private static final String DATE_FORMAT = "dd-MM-yyyy hh:mm:ss a z";
private static final DateTimeFormatter formatter = DateTimeFormatter.ofPattern(DATE_FORMAT);
public static ZoneId fromTimeZone;
    
public static void main(String[] args) {
    Set<String> availableZones;
    // availableZones = ZoneId.getAvailableZoneIds();
   
    fromTimeZone = ZoneId.of("Pacific/Auckland");
    LocalDateTime today = LocalDateTime.now();
    System.out.println(formatter.format(today.atZone(fromTimeZone)));
}
}
