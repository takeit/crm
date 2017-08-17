<?php

namespace PH\PaymentHubBundle\Entity;

/**
 * Interface Subscription.
 */
interface SubscriptionInterface
{
    const STATE_CART = 'cart';
    const STATE_COMPLETED = 'completed';
    const STATE_PAYMENT_SELECTED = 'payment_selected';
    const STATE_PAYMENT_SKIPPED = 'payment_skipped';
    const STATE_CANCELED = 'canceled';
    const STATE_REFUNDED = 'refunded';

    const INTERVAL_DONATION = 'donation';
    const INTERVAL_DAY = 'day';
    const INTERVAL_MONTH = 'month';
    const INTERVAL_YEAR = 'year';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getCheckoutState();

    /**
     * @param string $checkoutState
     */
    public function setCheckoutState($checkoutState);

    /**
     * @return string
     */
    public function getPaymentState();

    /**
     * @param string $paymentState
     */
    public function setPaymentState($paymentState);

    /**
     * @return string
     */
    public function getOrderState();

    /**
     * @param string $orderState
     */
    public function setOrderState($orderState);

    /**
     * @return \DateTime
     */
    public function getCheckoutCompletedAt();

    /**
     * @param \DateTime $checkoutCompletedAt
     */
    public function setCheckoutCompletedAt($checkoutCompletedAt);

    /**
     * @return int
     */
    public function getNumber();

    /**
     * @param int $number
     */
    public function setNumber($number);

    /**
     * @return string
     */
    public function getNotes();

    /**
     * @param string $notes
     */
    public function setNotes($notes);

    /**
     * @return float
     */
    public function getTotal();

    /**
     * @param float $total
     */
    public function setTotal($total);

    /**
     * @return mixed
     */
    public function getOrderId();

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId);

    /**
     * @return mixed
     */
    public function getCreatedAt();

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt);

    /**
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt);

    /**
     * @return string
     */
    public function getProviderType();

    /**
     * @param string $providerType
     */
    public function setProviderType($providerType);

    /**
     * @return mixed
     */
    public function getItems();

    /**
     * @param mixed $items
     */
    public function setItems($items);

    /**
     * @return mixed
     */
    public function getPayments();

    /**
     * @param mixed $payments
     */
    public function setPayments($payments);

    /**
     * @return mixed
     */
    public function getCustomer();

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer);

    /**
     * @return string
     */
    public function getInterval();

    /**
     * @param string $interval
     */
    public function setInterval($interval);

    /**
     * @return string
     */
    public function getToken();

    /**
     * @param string $token
     */
    public function setToken($token);
}