from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/ovi/home.php")

AddCustomer_info=driver.find_element_by_xpath('/html/body/div/div[1]/div[2]/a/button')
AddCustomer_info.click()
time.sleep(2)

inputName = driver.find_element_by_xpath('/html/body/div[2]/form/div[2]/input')
inputName.send_keys(' shahriar')
time.sleep(2)

inputphone = driver.find_element_by_xpath('/html/body/div[2]/form/div[3]/input')
inputphone.send_keys('01721051095')
time.sleep(2)

inputemail = driver.find_element_by_xpath('/html/body/div[2]/form/div[4]/input')
inputemail.send_keys('shahriar@gmail.com')
time.sleep(2)

inputaddress = driver.find_element_by_xpath('/html/body/div[2]/form/div[5]/input')
inputaddress.send_keys('Dhaka')
time.sleep(2)



btnSubmit = driver.find_element_by_xpath('/html/body/div[2]/form/div[6]/button')


btnSubmit.click()
time.sleep(3)