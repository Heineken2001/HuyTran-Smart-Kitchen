def INFRARED():
    global counter_infrared_sensor, infrared_value, lamp_on
    counter_infrared_sensor += 1
    if counter_infrared_sensor >= 50:
        counter_infrared_sensor = 0
        infrared_value = pins.digital_read_pin(DigitalPin.P1)
        if infrared_value == 1 and lamp_on == 0:
            lamp_on = 1
            serial.write_string("!4:LAMP:1#")
            serial.write_string("!5:INFRARED:1#")
        elif infrared_value == 0 and lamp_on == 1:
            lamp_on = 0
            serial.write_string("!4:LAMP:0#")
            serial.write_string("!5:INFRARED:0#")
def GAS_ALERT():
    global counter_gas_alert, gas_raw, buzzer_on
    counter_gas_alert += 1
    if counter_gas_alert >= 100:
        counter_gas_alert = 0
        gas_raw = pins.analog_read_pin(AnalogPin.P10)
        if gas_raw >= gas_threshold:
            pins.digital_write_pin(DigitalPin.P6, 1)
            pins.digital_write_pin(DigitalPin.P7, 0)
            buzzer_on = 2
            serial.write_string("!6:BUZZER:" + ("" + str(buzzer_on)) + "#")
            serial.write_string("!3:GAS:" + ("" + str(gas_raw)) + "#")
def DHT11_LCD():
    global counter_dht11
    counter_dht11 += 1
    if counter_dht11 >= 1800:
        counter_dht11 = 0
        NPNBitKit.dht11_read(DigitalPin.P0)
        NPNLCD.clear()
        NPNLCD.show_string("NHIET DO: " + ("" + str(NPNBitKit.dht11_temp())) + "*C",
            0,
            0)
        NPNLCD.show_string("DO AM: " + ("" + str(NPNBitKit.dht11_hum())) + "%", 0, 1)
        serial.write_string("!1:TEMP:" + ("" + str(NPNBitKit.dht11_temp())) + "#")
        serial.write_string("!2:HUMI:" + ("" + str(NPNBitKit.dht11_hum())) + "#")
def GAS_SENSOR():
    global counter_gas_sensor, gas_raw, buzzer_on
    counter_gas_sensor += 1
    if counter_gas_sensor >= 600:
        counter_gas_sensor = 0
        gas_raw = pins.analog_read_pin(AnalogPin.P10)
        if gas_raw >= 350 and gas_raw < gas_threshold:
            pins.digital_write_pin(DigitalPin.P6, 1)
            pins.digital_write_pin(DigitalPin.P7, 1)
            buzzer_on = 3
        elif gas_raw < 350:
            pins.digital_write_pin(DigitalPin.P6, 0)
            pins.digital_write_pin(DigitalPin.P7, 1)
            buzzer_on = 3
        serial.write_string("!6:BUZZER:" + ("" + str(buzzer_on)) + "#")
        serial.write_string("!3:GAS:" + ("" + str(gas_raw)) + "#")
def LIGHT_HUMAN():
    global counter_lighthuman
    counter_lighthuman += 1
    if counter_lighthuman >= 1800:
        counter_lighthuman = 0
        serial.write_string("!4:LAMP:" + ("" + str(lamp_on)) + "#")
        serial.write_string("!5:INFRARED:" + ("" + str(infrared_value)) + "#")

def on_data_received():
    global cmd, lamp_on, buzzer_on, manual_led, gas_threshold
    cmd = serial.read_until(serial.delimiters(Delimiters.HASH))
    if parse_float(cmd) == 0:
        lamp_on = 0
    elif parse_float(cmd) == 1:
        lamp_on = 1
    elif parse_float(cmd) == 3:
        buzzer_on = 3
    elif parse_float(cmd) == 4:
        manual_led = 4
    elif parse_float(cmd) == 5:
        manual_led = 5
    elif parse_float(cmd) > 350:
        gas_threshold = parse_float(cmd)
serial.on_data_received(serial.delimiters(Delimiters.HASH), on_data_received)

cmd = ""
gas_raw = 0
counter_gas_alert = 0
infrared_value = 0
gas_threshold = 0
manual_led = 0
lamp_on = 0
buzzer_on = 0
counter_infrared_sensor = 0
counter_lighthuman = 0
counter_gas_sensor = 0
counter_dht11 = 0
led.enable(False)
NPNLCD.lcd_init()
counter_dht11 = 0
counter_gas_sensor = 0
counter_lighthuman = 0
counter_infrared_sensor = 0
buzzer_on = 0
lamp_on = 0
manual_led = 5
gas_threshold = 600

def on_forever():
    DHT11_LCD()
    GAS_ALERT()
    LIGHT_HUMAN()
    GAS_SENSOR()
    if manual_led == 5:
        INFRARED()
    if buzzer_on == 2:
        pins.digital_write_pin(DigitalPin.P2, 1)
    else:
        pins.digital_write_pin(DigitalPin.P2, 0)
    if lamp_on == 1:
        pins.digital_write_pin(DigitalPin.P4, 1)
        pins.digital_write_pin(DigitalPin.P5, 0)
    if lamp_on == 0:
        pins.digital_write_pin(DigitalPin.P4, 0)
        pins.digital_write_pin(DigitalPin.P5, 0)
    basic.pause(100)
basic.forever(on_forever)
