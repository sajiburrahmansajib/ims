from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/project/addfrom_payment.html")

inputcustomarname = driver.find_element_by_xpath('/html/body/div[2]/form/div[2]/input')
inputcustomarname.send_keys('Nouman')
time.sleep(2)

inputProductName = driver.find_element_by_xpath('/html/body/div[2]/form/div[3]/input')
inputProductName.send_keys('Book')
time.sleep(2)

inputPaidAmount = driver.find_element_by_xpath('/html/body/div[2]/form/div[4]/input')
inputPaidAmount.send_keys('10')
time.sleep(2)

inputDueAmount = driver.find_element_by_xpath('/html/body/div[2]/form/div[5]/input')
inputDueAmount.send_keys('100')
time.sleep(2)


btnSubmit = driver.find_element_by_xpath('/html/body/div[2]/form/div[6]/button')


btnSubmit.click()
time.sleep(3)