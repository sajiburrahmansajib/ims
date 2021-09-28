from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/p2/home.php")

addsellinginfo=driver.find_element_by_xpath('/html/body/div/a/button')
addsellinginfo.click()
time.sleep(2)

inputdate = driver.find_element_by_xpath('/html/body/div[2]/form/div[2]/input')
inputdate.send_keys('9/27/2021')
time.sleep(2)

inputcustomarname = driver.find_element_by_xpath('/html/body/div[2]/form/div[3]/input')
inputcustomarname.send_keys('demo name')
time.sleep(2)

inputProductName = driver.find_element_by_xpath('/html/body/div[2]/form/div[4]/input')
inputProductName.send_keys('Power bank')
time.sleep(2)

inputTotalIteam = driver.find_element_by_xpath('/html/body/div[2]/form/div[5]/input')
inputTotalIteam.send_keys('10')
time.sleep(2)

inputTotalBill = driver.find_element_by_xpath('/html/body/div[2]/form/div[6]/input')
inputTotalBill.send_keys('1000')
time.sleep(2)


btnSubmit = driver.find_element_by_xpath('/html/body/div[2]/form/div[7]/button')


btnSubmit.click()
time.sleep(3)

