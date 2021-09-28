from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/soft/")

addorderinfo=driver.find_element_by_xpath('/html/body/div/div[1]/div[2]/a/button')
addorderinfo.click()
time.sleep(2)

inputcustomarname = driver.find_element_by_xpath('/html/body/div[2]/form/div[2]/input')
inputcustomarname.send_keys('sajjad')
time.sleep(2)

inputProductName = driver.find_element_by_xpath('/html/body/div[2]/form/div[3]/input')
inputProductName.send_keys('mouse')
time.sleep(2)

inputdate = driver.find_element_by_xpath('/html/body/div[2]/form/div[4]/input')
inputdate.send_keys('8/23/21')
time.sleep(2)




btnSubmit = driver.find_element_by_xpath('/html/body/div[2]/form/div[7]/button')


btnSubmit.click()
time.sleep(3)